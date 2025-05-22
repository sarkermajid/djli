@extends('frontend.index')

@section('frontend')
    <section id="services" class="services section-bg" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
                <h2>Branches</h2>
            </div>
            <div class="row">
                <div class="categories-grid">
                    @foreach ($branches as $branch)
                        <div class="category-card">
                            <div class="category-image" style="background-image: url('{{ asset($branch->image) }}');">
                            </div>
                            <div class="category-content">
                                <h3>{{ $branch->branch_name }}</h3>
                                <div class="category-list">
                                    <p>Address: {{ $branch->address }}</p>
                                    @if ($branch->director_name != null)
                                        <p>Director: {{ $branch->director_name }}</p>
                                    @endif
                                    <P>Phone: {{ $branch->phone }}</P>
                                    @if ($branch->email != null)
                                        <p>Email: {{ $branch->email }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <style>
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 30px;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        }

        .category-image {
            height: 220px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .category-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.1) 100%);
        }

        .category-content {
            padding: 25px;
        }

        .category-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #1a1a1a;
        }

        .category-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            font-size: 0.9rem;
            color: #6b7280;
        }

        .category-list li {
            list-style: none;
            padding: 5px 0;
            position: relative;
            padding-left: 15px;
        }

        .category-list li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #667eea;
            font-weight: bold;
        }
    </style>
@endsection
