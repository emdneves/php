@extends('layouts.main')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Welcome to our Building Expense and Budget Tracking Web App</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-money-bill-alt fa-3x mb-3"></i>
                        <h3 class="card-title">Expense Tracking</h3>
                        <p class="card-text">Effortlessly record and categorize your expenses, ensuring accurate financial management.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h3 class="card-title">Budget Management</h3>
                        <p class="card-text">Create and monitor budgets for your projects, ensuring you stay within financial limits.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-chart-pie fa-3x mb-3"></i>
                        <h3 class="card-title">Data Visualization</h3>
                        <p class="card-text">Visualize your expenses and budgets through intuitive charts and graphs for better insights.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="text-center">
                    <h2>What Our Users Say</h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial">
                                <i class="fas fa-quote-left fa-2x mb-3"></i>
                                <p>"This web app has been a game-changer for our construction projects. It helped us streamline our expense tracking and saved us valuable time and resources."</p>
                                <cite>- John Doe</cite>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial">
                                <i class="fas fa-quote-left fa-2x mb-3"></i>
                                <p>"I highly recommend this web app to anyone looking for an efficient way to manage their budgets. It's user-friendly and provides great insights into project expenses."</p>
                                <cite>- Jane Smith</cite>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <h2>Start Tracking Your Building Expenses Today</h2>
                <p>Sign up now and experience the convenience of our web app.</p>
                <form>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <button class="btn btn-primary" type="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h2 class="text-center">Pricing Plans</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Basic</h3>
                                <p class="card-text">Track expenses and manage budgets</p>
                                <p class="card-price">$9.99/month</p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Pro</h3>
                                <p class="card-text">Advanced features with enhanced reporting</p>
                                <p class="card-price">$19.99/month</p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Enterprise</h3>
                                <p class="card-text">Customized solutions for large-scale projects</p>
                                <p class="card-price">Contact Us</p>
                                <a href="#" class="btn btn-primary">Contact Sales</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <h2>Contact Us</h2>
                <p>Have questions or need support? Get in touch with our team.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-facebook"><i class="fab fa-facebook"></i></a></li>
                </ul>
                <p>Email: info@yourapp.com</p>
                <p>Phone: +1234567890</p>
            </div>
        </div>
    </div>
@endsection

@section('endcontent')
@endsection
