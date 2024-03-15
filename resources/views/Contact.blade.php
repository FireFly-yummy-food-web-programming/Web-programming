<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <title>Yummy Food Restaurant</title>
</head>
<style>
    .custom-class {
    color: #AD343E;
    font-family: 'DM Sans', sans-serif;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: 30px;
    letter-spacing: -0.72px;
}
.css-label{
    color: var(--Neutral-07, #2C2F24);
    /* Body/20px/Bold */
    font-family: DM Sans;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: 26px; /* 130% */
}
.hour-location{
    color: var(--Neutral-07, #2C2F24);
    /* Body/18px/Regular */
    font-family: DM Sans;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 28px; /* 155.556% */
    display: flex;
    flex-wrap:wrap;
    width: 190px;
}
h1 {
        font-family: 'Playfair Display', serif;
        font-size: 100px;
    }

    p {
        font-family: 'DM Sans', sans-serif;
        font-size: 18px;
    }

</style>
<body>
    <!-- init header -->
    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid bg-1 p-5" id="bg">
            <h1 class="text-center">Contact Us</h1>
            <p class="text-center">We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
        </div>
        <div class="container-fluid bg-white p-5" id="bg">
        </div>
        <div class="container">
            <form action="" method="post" >
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6" style="padding: 0;width:48%" >
                        <label for="name" class="form-label custom-label" style="margin-left: 12px;">Name</label>
                        <input type="text" class="form-control rounded-pill" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6" style="padding: 0;width:48%" >
                        <label for="email" class="form-label custom-label" style="margin-left: 12px;">Email</label>
                        <input type="email" class="form-control rounded-pill" name="email" id="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="row">
                    <label for="subject" class="col-form-label custom-label">Subject</label>
                    <input type="text" class="form-control rounded-pill" id="subject" name="subject" placeholder="Enter the subject">
                </div>
                <div class="row">
                    <label for="message" class="col-form-label custom-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" name="message" placeholder="Enter your message"></textarea>
                </div>
                <div class="row"></div>
                <div class="row">
                    <button type="submit" class="btn btn-primary" style="background-color: #AD343E; border: 1px solid black; border-radius: 118px;">Send</button>
                </div>
            </form>
        </div>
        <div class="container" id="contact-us">
            <div class="row">
                <div class="col-4">
                    <label class='form-label custom-label css-label'>Call Us:</label>
                    <p class='custom-class'>+1-234-567-8900</p>
                </div>
                <div class="col-4">
                    <label class='form-label custom-label css-label'>Hours:</label>
                    <p class='hour-location'>Mon-Fri: 11am - 8pm</p>
                    <p class='hour-location'>Sat, Sun: 9am - 10pm</p>
                </div>
                <div class="col-4">
                    <label class='form-label custom-label css-label'>Our Location:</label>
                    <p class='hour-location'>123 Bridge Street</p>
                    <p class='hour-location'>Nowhere Land, LA</p>
                    <p class='hour-location'>12345 United States</p>
                </div>
            </div>
        </div>
    </div>
    <!-- init footer -->
</body>

</html>