<?php

namespace App\Exports;

use App\Models\ApplicationForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ApplicationFormExport implements FromCollection, WithHeadings, WithMapping, WithColumnWidths, WithStyles
{
    /**
     * Fetch all application forms with related data.
     */
    public function collection()
    {
        return ApplicationForm::with(['japaneseExams', 'familyMembers'])->get();
    }

    /**
     * Define the column headings.
     */
    public function headings(): array
    {
        return [
            'ID', 'Name', 'Email', 'Phone', 'Date of Birth', 'Present Address', 'Permanent Address',
            'Union Porishad Name', 'Passport Issued', 'Date of Issue', 'Date of Expiration', 'Applied Before',
            'Japanese Exam Name(s)', 'Japanese Exam Year(s)', 'Japanese Exam Result(s)',
            'Family Member Name(s)', 'Relationship(s)', 'Family Member DOB(s)', 'Occupation(s)'
        ];
    }

    /**
     * Map the data for each row.
     */
    public function map($applicationForm): array
    {
        // Convert multiple records into comma-separated strings
        $japaneseExamNames = $applicationForm->japaneseExams->pluck('exam_name')->implode(', ');
        $japaneseExamYears = $applicationForm->japaneseExams->pluck('exam_year')->implode(', ');
        $japaneseExamResults = $applicationForm->japaneseExams->pluck('result')->implode(', ');

        $familyMemberNames = $applicationForm->familyMembers->pluck('name')->implode(', ');
        $familyRelationships = $applicationForm->familyMembers->pluck('relationship')->implode(', ');
        $familyMemberDOBs = $applicationForm->familyMembers->pluck('dob')->implode(', ');
        $familyOccupations = $applicationForm->familyMembers->pluck('occupation')->implode(', ');

        return [
            $applicationForm->id,
            $applicationForm->name,
            $applicationForm->email,
            $applicationForm->phone,
            $applicationForm->dob,
            $applicationForm->present_address,
            $applicationForm->permanent_address,
            $applicationForm->upn,
            $applicationForm->date_issue ? 'Yes' : 'No',
            $applicationForm->date_issue,
            $applicationForm->date_expiration,
            $applicationForm->apply_before,
            $japaneseExamNames,
            $japaneseExamYears,
            $japaneseExamResults,
            $familyMemberNames,
            $familyRelationships,
            $familyMemberDOBs,
            $familyOccupations,
        ];
    }

    /**
     * Set column widths.
     */
    public function columnWidths(): array
    {
        return [
            'A' => 10,  // ID
            'B' => 30,  // Name
            'C' => 25,  // Email
            'D' => 15,  // Phone
            'E' => 18,  // DOB
            'F' => 30,  // Present Address
            'G' => 30,  // Permanent Address
            'H' => 20,  // Union Porishad Name
            'I' => 10,  // Passport Issued
            'J' => 18,  // Date of Issue
            'K' => 18,  // Date of Expiration
            'L' => 15,  // Applied Before
            'M' => 15,  // Japanese Exam Name(s)
            'N' => 20,  // Japanese Exam Year(s)
            'O' => 20,  // Japanese Exam Result(s)
            'P' => 60,  // Family Member Name(s)
            'Q' => 30,  // Relationship(s)
            'R' => 30,  // Family Member DOB(s)
            'S' => 40,  // Occupation(s)
        ];
    }

    /**
     * Apply styles to the sheet.
     */
    public function styles(Worksheet $sheet)
    {
        // Make the header row bold
        $sheet->getStyle('A1:S1')->getFont()->setBold(true);

        // Center align the headers
        $sheet->getStyle('A1:S1')->getAlignment()->setHorizontal('center');

        // Set header row height
        $sheet->getRowDimension(1)->setRowHeight(25);

        return [
            1 => ['font' => ['bold' => true]], // First row (headers) will be bold
        ];
    }
}


