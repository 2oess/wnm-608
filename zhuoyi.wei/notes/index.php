<!DOCTYPE html>
<html>
<head>
    <?php include "parts/meta.php"; ?>
</head>
<body>

<div class="banner">
    <img src="img/banner.jpg"/>
    <div class="banner_mark">
        
    </div>

</div>

<div id="shop" class="shop">
    <div class="shop_title">Typography</div>
    <div class="shop_con">
        <div>
            <img src="img/img1.jpg"/>
            <div class="shop_name">
                SHOP ONE
            </div>
            <div class="shop_price">
                30$
            </div>
            <button class="buy_btn">BUY</button>
        </div>
        <div>
            <img src="img/img2.jpg"/>
            <div class="shop_name">
                SHOP TWO
            </div>
            <div class="shop_price">
                29.99$
            </div>
            <button class="buy_btn">BUY</button>
        </div>
        <div>
            <img src="img/img3.jpg"/>
            <div class="shop_name">
                SHOP THREE
            </div>
            <div class="shop_price">
                30.99$
            </div>
            <button class="buy_btn">BUY</button>
        </div>
        <div>
            <img src="img/img4.jpg"/>
            <div class="shop_name">
                SHOP FOUR
            </div>
            <div class="shop_price">
                31.99$
            </div>
            <button class="buy_btn">BUY</button>
        </div>
    </div>
</div>
<div id="paragraphs" class="paragraphs">
    <div class="shop_title">Paragraphs</div>
    <div class="paragraphs_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nisi quaerat corporis doloribus dolorem repellendus
        sunt error,
        numquam officiis vitae asperiores delectus magni aperiam reiciendis soluta magnam! Exercitationem, voluptatibus doloremque!
    </div>
    <div class="paragraphs_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nisi quaerat corporis doloribus dolorem repellendus
        sunt error,
        numquam officiis vitae asperiores delectus magni aperiam reiciendis soluta magnam! Exercitationem, voluptatibus doloremque!
    </div>
    <div class="paragraphs_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nisi quaerat corporis doloribus dolorem repellendus
        sunt error,
        numquam officiis vitae asperiores delectus magni aperiam reiciendis soluta magnam! Exercitationem, voluptatibus doloremque!
    </div>
</div>

<div class="flex_img"><img src="img/flex.jpg"/></div>
<div class="header" id="Navigations">
    <div class="shop_title">Navigations</div>
    <div class="header_con">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h4>Style guide</h4></a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav" style="float: right">
                    <li class=""><a href="#"><h4>HOME</h4></a></li>
                    <li><a href="#"><h4>SHOP</h4></a></li>
                    <li><a href="#"><h4>NEWS</h4></a></li>
                    <li><a href="#"><h4>ABOUT</h4></a></li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
</div>

</div>
<div class="forms" id="Forms">
    <div class="shop_title">Forms</div>
    <div class="forms_title">default form</div>
    <div class="forms_con">
        <input type="text" placeholder="name">
        <br>
        <br>
        <input type="password" placeholder="password">
        <br>
        <br>
        <input type="email" placeholder="email">
        <br>
        <br>
        <select>
            <option>java</option>
            <option>c#</option>
            <option>html</option>
            <option>css</option>
        </select>
        <br>
        <br>
        <button>button</button>
        <br>
        <br>
        <label>Male :</label> <input type="checkbox">
        <br>
        <br>
        <label>Male :</label><input type="checkbox">
        <br>
        <br>
        <label>Male :</label><input type="radio">
        <br>
        <br>
        <label>Male :</label><input type="radio">
        <br>
        <br>

    </div>

    <div class="forms_title">Contact Form</div>
    <div class="forms_con">
        <div>
            <label>Name:</label>
            <br>
            <input type="text" placeholder="Name" class="ipt_name">
        </div>
        <div>
            <label>Password:</label>
            <br>
            <input type="password" placeholder="Password" class="ipt_name">
        </div>
        <div>
            <label>Email:</label>
            <br>
            <input type="email" placeholder="Password" class="ipt_name">
        </div>
        <div>
            <label>Choose:</label>
            <br>
            <select class="ipt_name">
                <option>java</option>
                <option>c#</option>
                <option>html</option>
                <option>css</option>
            </select>
        </div>
        <textarea class="textarea" placeholder="content" style="margin-bottom: 20px"></textarea>
        <div>
            <label>Male1 :</label> <input type="checkbox" style="margin-right: 20px">
            <label>Male2 :</label> <input type="checkbox" style="margin-right: 20px">
            <label>Male3 :</label><input type="radio" style="margin-right: 20px">
            <label>Male4 :</label><input type="radio" style="margin-right: 20px">
        </div>
        <button type="button" class="btn_sub">Submit</button>
    </div>

    <?php include "parts/footer.php"; ?>
</div>
</body>
</html>
