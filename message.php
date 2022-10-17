<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Message</title>
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="main_div">
        <div class="left_div">
            <div class="search_card">
                <div class="card_left">
                    <input type="text" placeholder="Search" />
                </div>
                <div class="card_right">
                    <a href="" class="search"></a>
                </div>
            </div>
            <hr/>
            <ul class="people">
                <li class="person" data-chat="person1">
                    <img src="https://www.observerbd.com/2021/05/24/observerbd.com_1621879271.jpg" alt="" />
                    <span class="name">Prof Mahmood Hossain</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">I was wondering...</span>
                </li>
                <li class="person" data-chat="person2">
                    <img src="data:image/jpeg;base64,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" alt="" />
                    <span class="name">Sakib AL Hasan</span>
                    <span class="time">1:44 PM</span>
                    <span class="preview">I've forgotten how it felt before</span>
                </li>
                <li class="person" data-chat="person3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0TVHGBHVXaQ37UWvCex8CZod-fYOKhTMaIQ&usqp=CAU" alt="" />
                    <span class="name">Ashraful Alam Khokon</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">But we’re probably gonna need a new carpet.</span>
                </li>
                <li class="person" data-chat="person4">
                    <img src="https://theconferencealerts.com/avatars/1538507738.jpg" alt="" />
                    <span class="name">Prof Fayek Uzzaman</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">It’s not that bad...</span>
                </li>
                <li class="person" data-chat="person5">
                    <img src="data:image/jpeg;base64,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" alt="" />
                    <span class="name">MD. A R Nirjhor</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">Vai Assalamu Alaikum</span>
                </li>
                <li class="person" data-chat="person6">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/drake.jpg" alt="" />
                    <span class="name">Md. Karin Hasan</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">Hello Guys</span>
                </li>
            </ul>
        </div>
        <div class="right_div">
            <div class="to_div">
                <p>To: <span>Atir Islam</span></p>
            </div>
            <div class="chat">
                <div class="conversation-start">
                    <span>Today, 5:38 PM</span>
                </div>
                <div class="bubble you">
                    Hello, can you hear me?
                </div>
                <div class="bubble you">
                    I'm in California dreaming
                </div>
                <div class="bubble me">
                    ... about who we used to be.
                </div>
                <div class="bubble me">
                    Are you serious?
                </div>
                <div class="bubble you">
                    When we were younger and free...
                </div>
                <div class="bubble you">
                    I've forgotten how it felt before
                </div>
            </div>
        </div>
    </div>
</body>
</html>