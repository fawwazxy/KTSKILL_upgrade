@extends('layouts.app')

@section('content')
    <style>
        .contact-section {
            padding: 60px 30px;
            background-color: #f9f9f9;
        }

        .contact-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #003366; /* Dark blue color */
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px; /* Add margin to separate from contact info */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #007bff; /* Blue border on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff; /* Blue button */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .contact-info {

            margin-top: 40px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info h5 {
            font-weight: bold;
            color: #003366; /* Dark blue color */
        }

        .contact-form {
            margin-top: 40px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h5 {
            font-weight: bold;

            text-align: center;
        }

        .contact-form p {

            text-align: center;
        }

        .info-item {
            display: flex;
            align-items: center; /* Center items vertically */
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #e0e0e0; /* Light border */
            border-radius: 5px; /* Rounded corners */
            background-color: #f8f9fa; /* Light background for items */
            height: 100px; /* Set a fixed height for uniformity */
        }

        .info-item i {
            font-size: 1.5rem;
            color: #007bff; /* Blue color for icons */
            margin-right: 10px;
        }
    </style>

    <section class="contact-section">
        <div class="container">
            <h2 class="contact-title text-center">Contact Us</h2>

            <!-- Contact Information Section -->
            <div class="contact-info">
                <h5>Contact Information</h5>
                <div class="row">
                    <div class="col-md-6" style="padding-top: 20px">
                        <div class="info-item d-flex align-items-center justify-content-start">
                            <i class="fa fa-map-marker-alt"></i>
                            <p class="ml-2"><strong>Location:</strong> F18-F27 Kawasan Perindustrian Chendering, 21080 Kuala Terengganu, Terengganu</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px">
                        <div class="info-item d-flex align-items-center justify-content-start">
                            <i class="fa fa-phone"></i>
                            <p class="ml-2"><strong>Phone:</strong> 016-6198849</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px">
                        <div class="info-item d-flex align-items-center justify-content-start">
                            <i class="fa fa-envelope"></i>
                            <p class="ml-2"><strong>Email:</strong> <a href="mailto:ktskill@ktsi.edu.my">ktskill@ktsi.edu.my</a></p>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px">
                        <div class="info-item d-flex align-items-center justify-content-start">
                            <i class="fa fa-fax"></i>
                            <p class="ml-2"><strong>Fax:</strong> 09-6164410</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form">
                <h5>Send us a message</h5>
                <p>Any problem? You can text me.</p>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            
        </div>
    </section>

    <!-- Social Media Section -->
    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
@endsection

@section('scripts')
    <script>
        // Add any necessary scripts here
    </script>
@endsection
