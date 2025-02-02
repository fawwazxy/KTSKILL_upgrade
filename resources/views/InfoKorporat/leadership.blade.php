
    <div class="container">
        <h2 class="text-center text-custom-blue mb-4">Leadership Team</h2>

        <div class="leadership-hierarchy">
            <!-- CEO Section (Top Level) -->
            <div class="ceo-section">
                <div class="leader-box ceo">
                    <img src="{{ asset($leadership['CEO']->image) }}" alt="CEO Image">
                    <h3>{{ $leadership['CEO']->name }}</h3>
                    <p><strong>{{ $leadership['CEO']->position }}</strong></p>
                    <p>Email: {{ $leadership['CEO']->email }}</p>
                    <p>Tel: {{ $leadership['CEO']->phone }} | Fax: {{ $leadership['CEO']->fax }}</p>
                </div>
            </div>

            <!-- Line connecting CEO to Heads -->
            <div class="connector"></div>

            <!-- Heads of Departments (Second Level) -->
            <div class="department-heads">
                @foreach ($leadership['heads'] as $head)
                    <div class="leader-box hod">
                        <img src="{{ asset($head->image) }}" alt="{{ $head->name }}">
                        <h4>{{ $head->name }}</h4>
                        <p><strong>{{ $head->position }}</strong></p>
                        <p>Email: {{ $head->email }}</p>
                        <p>Tel: {{ $head->phone }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Line connecting Heads to Other Leaders -->
            <div class="connector"></div>

            <!-- Other Leadership Members (Third Level) -->
            <div class="other-leaders">
                @foreach ($leadership['leaders'] as $leader)
                    <div class="leader-box">
                        <img src="{{ asset($leader->image) }}" alt="{{ $leader->name }}">
                        <h5>{{ $leader->name }}</h5>
                        <p><strong>{{ $leader->position }}</strong></p>
                        <p>Email: {{ $leader->email }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        .leadership-hierarchy {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        /* CEO Section */
        .ceo-section {
            text-align: center;
        }

        .ceo {
            background: rgba(0, 81, 180, 0.9);
            color: white;
            padding: 25px;
            width: 350px;
        }

        /* Connecting lines */
        .connector {
            width: 3px;
            height: 30px;
            background: black;
        }

        /* Department Heads (Second Level) */
        .department-heads {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .hod {
            background: rgba(255, 215, 0, 0.9);
            color: black;
            padding: 20px;
        }

        /* Other Leaders (Third Level) */
        .other-leaders {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .leader-box {
            text-align: center;
            background: #f7f7f7;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 250px;
        }

        .leader-box img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>

