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

    <main class="news_page">
        <div class="category">
            <div class="container">
                <nav class="category-nav">
                    <ul class="category-menu">
                        <li class="category-item"><a href="#" class="category-link">Xã hội</a></li>
                        <li class="category-item"><a href="#" class="category-link">Giải trí</a></li>
                        <li class="category-item"><a href="#" class="category-link">Sức khỏe</a></li>
                        <li class="category-item"><a href="#" class="category-link">Thể thao</a></li>
                        <li class="category-item"><a href="#" class="category-link">Tài chính</a></li>
                        <li class="category-item"><a href="#" class="category-link">Pháp luật</a></li>
                        <li class="category-item"><a href="#" class="category-link">Bất động sản</a></li>
                        <li class="category-item"><a href="#" class="category-link">Khám phá</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            <h1>Tin tức</h1>
            <div class="box-news">
                <div class="box_detail_news featured-news">
                    <a href="#">
                        <div class="news-image-container">
                            <div class="top_left">
                                Tuyển Dụng
                            </div>
                            <img src="./assets/images/news_page1.jpg" alt="Cloud Portal update" class="img-fluid">
                        </div>
                        <div class="title_tour">
                            <p class="news-title">Cloud Portal tuyển dụng tháng 6/2025</p>
                            <span class="news-date">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                </svg>
                                11:09 4/3/2025
                            </span>
                        </div>
                    </a>
                </div>
                
                <div class="small_grid">
                    <div class="box_detail_news small-news">
                        <a href="#">
                            <div class="news-image-container">
                                <div class="top_left">
                                    Hoạt động kinh doanh
                                </div>
                                <img src="assets/images/news_page.jpg" alt="Trump tariff news" class="img-fluid">
                            </div>
                            <div class="title_tour">
                                <p class="news-title">Change Data Capture: Đồng bộ dữ liệu tự động...</p>
                                <span class="news-date">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                    </svg>
                                    11:09 4/3/2025
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="box_detail_news small-news">
                        <a href="#">
                            <div class="news-image-container">
                                <div class="top_left">
                                    Khoa học - Công nghệ
                                </div>
                                <img src="assets/images/news_page2.jpg" alt="Trump tariff news" class="img-fluid">
                            </div>
                            <div class="title_tour">
                                
                                <p class="news-title">Change Data Capture: Đồng bộ dữ liệu tự động...</p>
                                <span class="news-date">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                    </svg>
                                    11:09 4/3/2025
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list_news">
                <a href="">
                    <div class="news">
                        <div class="image">
                            <img src="./assets/images/list_news.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Xu hướng ứng dụng điện toán đám mây trong ngành Logistics</h3>
                            <span class="news-date">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                </svg>
                                11:09 4/3/2025
                            </span>
                            <p>
                            Xu hướng ứng dụng điện toán đám mây trong ngành Logistics như thế nào? Điện toán đám mây (Cloud Computing) đã trở thành xu hướng hàng đầu trong ngành logistics nhờ khả năng cung cấp các giải pháp tối ưu, linh hoạt và tiết kiệm chi phí. Sự phát triển của công nghệ điện toán đám mây
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="news">
                        <div class="image">
                            <img src="./assets/images/list_news.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Xu hướng ứng dụng điện toán đám mây trong ngành Logistics</h3>
                            <span class="news-date">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                </svg>
                                11:09 4/3/2025
                            </span>
                            <p>
                            Xu hướng ứng dụng điện toán đám mây trong ngành Logistics như thế nào? Điện toán đám mây (Cloud Computing) đã trở thành xu hướng hàng đầu trong ngành logistics nhờ khả năng cung cấp các giải pháp tối ưu, linh hoạt và tiết kiệm chi phí. Sự phát triển của công nghệ điện toán đám mây
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="news">
                        <div class="image">
                            <img src="./assets/images/list_news.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Xu hướng ứng dụng điện toán đám mây trong ngành Logistics</h3>
                            <span class="news-date">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                </svg>
                                11:09 4/3/2025
                            </span>
                            <p>
                            Xu hướng ứng dụng điện toán đám mây trong ngành Logistics như thế nào? Điện toán đám mây (Cloud Computing) đã trở thành xu hướng hàng đầu trong ngành logistics nhờ khả năng cung cấp các giải pháp tối ưu, linh hoạt và tiết kiệm chi phí. Sự phát triển của công nghệ điện toán đám mây
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="news">
                        <div class="image">
                            <img src="./assets/images/list_news.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Xu hướng ứng dụng điện toán đám mây trong ngành Logistics</h3>
                            <span class="news-date">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                </svg>
                                11:09 4/3/2025
                            </span>
                            <p>
                            Xu hướng ứng dụng điện toán đám mây trong ngành Logistics như thế nào? Điện toán đám mây (Cloud Computing) đã trở thành xu hướng hàng đầu trong ngành logistics nhờ khả năng cung cấp các giải pháp tối ưu, linh hoạt và tiết kiệm chi phí. Sự phát triển của công nghệ điện toán đám mây
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="pagination">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.757831 13.8927C0.367312 14.2832 0.367314 14.9164 0.757836 15.3069L0.993527 15.5426C1.38405 15.9331 2.01722 15.9331 2.40774 15.5426L9.24309 8.7072C9.63361 8.31668 9.63361 7.68351 9.24308 7.29299L2.40763 0.457592C2.0171 0.0670691 1.38394 0.0670712 0.993416 0.457597L0.757723 0.693292C0.3672 1.08382 0.367203 1.71698 0.757727 2.1075L5.94323 7.29299C6.33376 7.68351 6.33376 8.31668 5.94324 8.7072L0.757831 13.8927Z" fill="#9B9B9B"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
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