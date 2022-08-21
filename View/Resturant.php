<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/CSS/nav.css">
    <style>
        .container {
            display: grid;
            width: 1000px;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px
        }

        .Resturant {
            border: 2px solid burlywood;
            border-radius: 10px;
            padding: 15px;
        }

        .Resturant img{
            width: 100%;
            height:40%;
        }
        .Resturant p{
            color :black;
        }
    </style>
    <title>Admin Dashboard</title>
</head>
<body>
<nav class="navigation">
        <h3 class="logo"> <a href="Homepage.php">FDS</a></h3>
        <div>
            <div class="dropdown">
                <button class="dropbtn nav-link">User List</button>
                <div class="dropdown-content">
                    <a href="Customer.php">Customer</a>
                    <a href="Resturant.php">Resturant</a>
                    <a href="DeliveryMan.php">Delivery Man</a>
                </div>
            </div>
            <!-- <a class="nav-link" href="">User List</a> -->
            <a class="nav-link" href="">Issues</a>
        </div>
        <div>
            <div class="dropdown">
                <button class="dropbtn nav-link">Profile</button>
                <div class="dropdown-content">
                    <a href="../View/viewProfile.php">View Profile</a>
                    <a href="../View/updateProfileInfo.php">Edit Profile</a>
                    <a href="../View/changePassword.php">Change Password</a>
                </div>
            </div>
            <a class="nav-link logout" href="login.php">Log out</a>
        </div>
    </nav>
    <main>
        <Section>
            <div class="container">
                <div class="Resturant">
                    <img src="../Resources/Resturant/Resturent1.jpg" alt="">
                    <h2>Kaachi bhai</h2>
                    <h4>Location:Bashundara</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro ut beatae corrupti ad error commodi
                    perspiciatis cum quod adipisci assumenda, velit ab. Facere, fuga repellat. Iusto harum tempora animi
                    aperiam!</p>
                    <button>View food list</button>
                </div>
                <div class="Resturant">
                    <img src="../Resources/Resturant/Resturent2.jpg" alt="">
                    <h2>Sultan's Dine</h2>
                    <h4>Location:Bashundara</h4>
                    <p>Et corrupti deserunt cupiditate ad sed! Deleniti, ducimus incidunt velit reiciendis cum sequi in ea
                    impedit praesentium aliquid exercitationem rerum dolores ad delectus alias? Tempore nesciunt blanditiis
                    quia vero! Animi.</p>
                    <button>View food list</button>
                </div>
                <div class="Resturant">
                    <img src="../Resources/Resturant/Resturent3.jpg" alt="">
                    <h2>Chilox</h2>
                    <h4>Location:Bashundara</h4>
                    <p>Adipisci odio sed nam ut, debitis eos non quisquam. Ipsam adipisci similique natus fuga quae reiciendis
                    fugiat architecto labore cum, ratione odit deleniti sapiente commodi dignissimos corrupti possimus
                    consectetur officia!</p>
                    <button>View food list</button>
                </div>
                <div class="Resturant">
                    <img src="../Resources/Resturant/Resturent4.jpg" alt="">
                    <h2>Burger King</h2>
                    <h4>Location:Bashundara</h4>
                    <p>Dicta, dolore sit ad pariatur ipsa autem officiis dolorem ea veniam, temporibus possimus maxime dolores
                    eum necessitatibus eveniet veritatis laboriosam quae a fuga adipisci rerum itaque! Dignissimos a iste
                    ut!</p>
                    <button>View food list</button>
                </div>
                <div class="Resturant">
                    <img src="../Resources/Resturant/Resturent5.jpg" alt="">
                    <h2>KFC</h2>
                    <h4>Location:Bashundara</h4>
                    <p>Quia esse dolorem possimus at voluptatibus. Expedita exercitationem ipsum omnis eum, quam eligendi est
                    consequuntur optio! Illum assumenda error commodi, itaque molestias deserunt corrupti hic quaerat
                    corporis dignissimos aspernatur consequuntur.</p>
                    <button>View food list</button>
                </div>
                <div class="Resturant">
                    <img src="../Resources/Resturant/Resturent6.jpg" alt="">
                    <h2>Kudos</h2>
                    <h4>Location:Bashundara</h4>
                    <p>Quia facilis ipsam voluptate distinctio, itaque veniam possimus consequuntur nesciunt error numquam
                    architecto modi repellat aut ad vel aperiam unde ullam quisquam! Voluptatibus laboriosam aliquid rerum
                     ex dolore? Laboriosam, quia.</p>
                    <button>View food list</button>
                </div>
            </div>
        </Section>
    </main>
</body>
</html>