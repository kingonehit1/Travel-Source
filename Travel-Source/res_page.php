<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/res.css">
    <link rel="stylesheet" href="./css/res.fix.css">
</head>
<body>
<?php require_once 'header.php';?>

    <div class="container">
        <div class="head">
            <div class="head-map">
                <div class="box-map">
                    <a href="https://www.google.com/maps/@14.1053708,108.4191312,9z">
                    <button class="btn-map">
                        <i class="fas fa-map-marker-alt"></i> Xem bản đồ
                    </button>
                    </a>
                </div>
            </div>
            <div class="head-name">
                <div class="name-txt">
                    <h2>Nhà hàng tại Quy Nhơn Bình Định
                    </h2>
                </div>
                <div class="name-select">
                    <div class="select-colum1">
                        <span>Không có cơ sở kinh doanh nào khác tại Bình Định. Xem kết quả gần đó bên dưới:</span>  
                    </div>
                    <div class="select-colum2">
                        <span class="sp1">Sắp xếp theo:</span>
                                <select name="dropdown">
                                    <option value="Giá trị tốt nhất" selected><span>Chất lượng</span></option>
                                    <option value="Được khách du lịch xếp hạng"><span>xếp hạng</span></option>
                                    <option value="Giá"><span>Giá(thấp đến cao)</span></option>
                                </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="left">
                <div class="select-item">
                    <span>Giá từ:</span>
                    <div class="check">
                        <input type="checkbox" name="ckb1"><span>Từ 100k-1000k</span><br>
                        <input type="checkbox" name="ckb1"><span>Từ 1000k-2000k</span><br>
                        <input type="checkbox" name="ckb1"><span>Trên 2000k</span><br>
                    </div>
                    <div class="border"></div>
                </div>
                <div class="select-item">
                    <span>Loại cơ sở kinh doanh:</span>
                    <div class="check">
                        <input type="checkbox" name="ckb1"> <span>Món Việt</span><br>
                        <input type="checkbox" name="ckb1"> <span>Món Á</span><br>
                        <input type="checkbox" name="ckb1"> <span>Món Âu</span><br>
                        <input type="checkbox" name="ckb1"> <span>Món ăn nhanh</span><br>
                    </div>
                    <div class="border"></div>
                </div>
                <div class="select-item">
                    <span>Tiện nghi:</span>
                    <div class="check">
                        <input type="checkbox" name="ckb1"> <span>Nhà hàng</span><br>
                        <input type="checkbox" name="ckb1"> <span>Bãi đậu xe</span><br>
                        <input type="checkbox" name="ckb1"> <span>Bể bơi</span><br>
                    </div>
                    <div class="border"></div>
                </div> 
                <div class="select-item">
                    <span>Hạng khách sạn:</span>
                    <div class="check">
                        <input type="checkbox" name="ckb1"> <span>5 <i class="fas fa-star" style="font-size: 10px;"></i></span><br>
                        <input type="checkbox" name="ckb1"> <span>4 <i class="fas fa-star" style="font-size: 10px;"></i></span><br>
                        <input type="checkbox" name="ckb1"> <span>3 <i class="fas fa-star" style="font-size: 10px;"></i></span><br>
                    </div>
                    <div class="border"></div>
                </div>        
            </div>
            <div class="right">
                <h5>Có chỗ ngồi ngoài trời</h5>
                <div class="right-item">
                    <ul >
                        <li class="slide-item " >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <li class="slide-item" >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <li class="slide-item" id="last" >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <button class="btn-next">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </ul> 
                </div>
                <h5>Có chỗ ngồi ngoài trời</h5>
                <div class="right-item">
                    <ul >
                        <li class="slide-item " >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <li class="slide-item" >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <li class="slide-item" id="last" >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <button class="btn-next">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </ul> 
                </div>
                <h5>Có chỗ ngồi ngoài trời</h5>
                <div class="right-item">
                    <ul >
                        <li class="slide-item " >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <li class="slide-item" >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <li class="slide-item" id="last" >
                            <div class="img">
                                <img src="./img/images.jpg">
                            </div>
                            <div class="row1">
                                <span>Nhà hàng Cây Dừa</span>
                            </div>
                            <div class="row1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <b>   1.321</b>  
                            </div>
                            <div class="row3">
                                <span>Kiểu Á</span>
                            </div>
                            <div class="row4">
                                <a href="restaurant_detail.php"><button>Chi tiết</button></a>
                            </div>
                        </li>
                        <button class="btn-next">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php';?>
</body>
</html>