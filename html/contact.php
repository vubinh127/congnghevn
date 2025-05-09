<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="contact_page">
            <div class="contact-content">
                <div class="banner">
                    <h2 class="contact-heading">Nhận ngay ưu đãi & tư vấn từ<br>những chuyên gia hàng đầu</h2>
                    <img src="./assets/images/contact_banner.jpg" alt="">
                </div>                
                <div class="container">
                    <div class="contact-form-card">
                        <h5 class="form-title mb-4">Doanh nghiệp/Cá nhân vui lòng để lại thông tin</h5>
                        
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fullName">Họ và tên</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Nhập nội dung">
                                </div>
                                <div class="col-md-6">
                                    <label for="companyName">Tên công ty</label>
                                    <input type="text" class="form-control" id="companyName" placeholder="Nhập nội dung">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label for="email">Email công ty*</label>
                                    <input type="email" class="form-control" id="email" placeholder="Nhập nội dung" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Số điện thoại*</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Nhập nội dung" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" placeholder="Nhập nội dung">
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Mô tả</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Nhập nội dung"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary submit-btn">GỬI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>


<script
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./assets/js/index.js"></script>
</body>

</html>