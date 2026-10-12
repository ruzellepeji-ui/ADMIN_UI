<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Management - Pio De Roda Cafe</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="service.css" />

   
</head>
<body>

    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <div>
            <div class="brand-header">
                <div class="brand-logo-container">
                    <img src="pioderoda.jpg" alt="Pio De Roda Logo" class="brand-logo-img">
                </div>
                <h2>PIO DE RODA</h2>
                <p>RESERVATION SYSTEM</p>
            </div>
            
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                </li>

                <li class="nav-item ">
                    <a href="reservation.php"><i class="fa-solid fa-calendar-check"></i> Reservations</a>
                </li>

                <li class="nav-item">
                    <a href="calendar.php"><i class="fa-solid fa-calendar-days"></i> calendar</a>
                </li>

                <li class="nav-item active">
                    <a href="service.php"><i class="fa-solid fa-concierge-bell"></i> Services</a>
                </li>

                <li class="nav-item">
                    <a href="event.php"><i class="fa-solid fa-calendar-days"></i> Events</a>
                </li>

                <li class="nav-item">
                    <a href="customer.php"><i class="fa-solid fa-users"></i> Customers</a>
                </li>

                <li class="nav-item">
                    <a href="payment.php"><i class="fa-solid fa-money-bill-wave"></i> Payment</a>
                </li>
                
                <li class="nav-item">
                    <a href="reports.php"><i class="fa-solid fa-chart-column"></i> Reports</a>
                </li>

                <li class="nav-item"><a href="#"><i class="fa-solid fa-box-archive"></i> Archive</a></li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <li class="nav-item" style="list-style: none;"><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-wrapper">
        <div class="top-navbar">
            <span style="font-size: 18px; color: var(--text-dark); font-weight: 700;">Our Services & Packages</span>
            <div class="user-profile">
                <div class="user-avatar"><i class="fa-solid fa-user"></i></div>
                <div class="user-info">
                    <p>Admin User</p>
                    <span>Administrator</span>
                </div>
            </div>
        </div>

        <div class="content-body">

            <!-- Page Title Section matching the UI image -->
            <div class="page-header-container">
                <div class="page-title-group">
                    <p>Manage your service offerings. Every package below can be adjusted to your guest count and budget — tap a card to see what's included.</p>
                </div>
                <button class="btn-add-new"><i class="fa-solid fa-plus"></i> Add New Package</button>
            </div>

            <!-- Services Grid (Row 1 & Row 2) -->
            <div class="services-grid">

                <!-- Card 1: Catering with Menu -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="cateringwithmenu.jpg" alt="Catering with Menu">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Catering with Menu</h3>
                        <p class="service-desc">Full-course catering with a customizable menu for any occasion, served at your chosen venue.</p>
                        <div class="price-label">Starting at ₱1,000 <span>/ head</span></div>
                    
                    </div>
                </div>

                <!-- Card 2: Venue Rentals -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="venueRentals.jpg" alt="Venue Rentals">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Venue Rentals</h3>
                        <p class="service-desc">A comfortable and welcoming space for celebrations, gatherings, and memorable special events.</p>
                        <div class="price-label">Starting at ₱15,000</div>
                        
                    </div>
                </div>

                <!-- Card 3: Dine-In Menu -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="dineInMenu.jpg" alt="Dine-In Menu">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Dine-In Menu</h3>
                        <p class="service-desc">A selection of delicious meals and refreshing drinks served fresh for all dine-in guests to enjoy and savor.</p>
                        <div class="price-label">Starting at ₱600 <span>/ head</span></div>
                        
                    </div>
                </div>

                <!-- Card 4: Non-Coffee Booth Package -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="nonCoffee.jpg" alt="Non-Coffee Booth Package">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Non-Coffee Booth Package</h3>
                        <p class="service-desc">A refreshment booth serving fruit teas, milk drinks, and mocktails for your guests.</p>
                        <div class="price-label">Starting at ₱4,250 <span>/ package</span></div>
                        
                    </div>
                </div>

                <!-- Card 5: Coffee Booth Package -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="coffeeBooth.jpg" alt="Coffee Booth Package">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Coffee Booth Package</h3>
                        <p class="service-desc">A coffee station serving freshly brewed coffee and refreshing specialty drinks for your guests.</p>
                        <div class="price-label">Starting at ₱6,250 <span>/ package</span></div>
                        
                    </div>
                </div>

                <!-- Card 6: Pizza Booth -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="pio1.jpg" alt="Pizza Booth">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Pizza Booth</h3>
                        <p class="service-desc">A pizza station serving freshly prepared, delicious pizzas and tasty treats, perfect for sharing with your guests.</p>
                        <div class="price-label">Starting at ₱7,500 <span>/ package</span></div>
                        
                    </div>
                </div>

                <!-- Card 7: Intimate Celebration Package -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="pio1.jpg" alt="Intimate Celebration Package">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Intimate Celebration Package</h3>
                        <p class="service-desc">A cozy, scaled-down package for smaller celebrations with close family and friends.</p>
                        <div class="price-label">Starting at ₱4,000 <span>/ package</span></div>
                        
                    </div>
                </div>

                <!-- Card 8: Equipment Rental -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="pio1.jpg" alt="Equipment Rental">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Equipment Rental</h3>
                        <p class="service-desc">Tables, chairs, tents, food warmers, and other essentials to keep your event comfortable, organized, and ready for any occasion.</p>
                        <div class="price-label">Starting at ₱300 <span>/ item</span></div>
                        
                    </div>
                </div>

                <div class="service-card">
                    <div class="card-image-wrap">
                        <img src="pio1.jpg" alt="Equipment Rental">
                    </div>
                    <div class="card-body">
                        <h3 class="service-title">Other Services</h3>
                        <p class="service-desc">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>
                        <div class="price-label">Starting at ₱00.00 </div>
                        
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html>