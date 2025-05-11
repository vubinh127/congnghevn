<?php 
/**
 * Template Name: Contact
 */
get_header(); ?>
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
<?php get_footer();