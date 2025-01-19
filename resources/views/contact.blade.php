@extends('layouts.app')

@section('content')
    <style>
        .social-icons {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            z-index: 100;
        }

        .social-icons ul {
            list-style: none;
            padding: 0;
            display: flex; /* Show the list directly */
            flex-direction: column;
            align-items: center;
        }

        .social-icons li {
            margin-bottom: 10px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f1f1f1;
            transition: background-color 0.3s;
            color: #333;
        }

        .social-icons a:hover {
            background-color: #e0e0e0;
            color: #000;
        }
    </style>

    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
<script>

</script>
@endsection
