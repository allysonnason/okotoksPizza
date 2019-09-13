<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="The best pizza Okotoks has to offer. Fresh made pepporini, delux, cheese and more!">
        <meta name="keywords" content="pizza, fresh, Pepperoni, cheesepizza">
        <meta name="author" content="Ally">
        <title>Okotoks Pizza</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>


        <nav class="myNav">
            <ul>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </nav>


        <div class= "wrapper">

            <header class="myHeading">
                <img src="assets/okotoks-pizza-logo.png" alt="logo" class="logo">

                <div class="mobilephone">
                    <button type="button" class="btn btn-pill btn-danger" "float-right" style="width:400px"><a href ="403-555-1234">Call to Order!</a></button>
                </div>

                <div class="toggle-btn float-right" onclick="toggleSidebar" ()>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="headingphone">
                    <p>Ph: 403-555-1234</p>
                </div>

            </header>

            <main>
                <div class="row">
                    <div class="myAds">
                        <div class="column">
                            <img src="assets/dinnerForTwo!.jpg" alt="Pizza Deals">
                        </div>
                        <div class="column">
                            <img src="assets/feedTheFamily.jpg" alt="A family enjoying pizza">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contact">
                        <div class="column">
                            <h3>Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40411.892446009864!2d-113.99980987516192!3d50.72470175549218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53719832dbd76fe5%3A0x583906fa0929b961!2sOkotoks%2C+AB!5e0!3m2!1sen!2sca!4v1557448585905!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </main>

            <footer>
                <p>&copy;Okotoks Pizza 2019</p>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
        document.querySelector('.toggle-btn').addEventListener('click', function(){

            document.querySelector('.myNav').classList.toggle('open')
        })

        </script>

    </body>
</html>
