<style type="text/css">
    
        *{
            font-family: Verdana;
            margin: 0;
            padding: 0;
        }

        .container{
            width: 100%;
            height: 100vh;
            background: rgb(26,39,50);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(5,4,71,1) 28%, rgba(9,9,121,1) 61%, rgba(0,212,255,1) 100%);
            overflow: hidden;
            position: relative;
        }

        .banner{
            width: 100%;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .banner h1{
            font-size: 70px;
            color: #ddd;
            font-weight: 300;
            margin-top: 15%;
            margin-bottom: 10px;
            animation-name: moveToLeft;
            animation-duration: 2s;
        }

         .banner h4{
            font-size: 24px;
            color: #ddd;
            font-weight: 100;
            margin-bottom: 20px;
            animation-name: moveToLeft;
            animation-duration: 2s;
        }

        .banner button{
            width: 160px;
            padding: 12px;
            margin: 20px;
            border: 2px solid #eee;
            border-radius: 50px;
            font-size: 17px;
            outline: none;
            letter-spacing: 1px;
        }

        .btn-left{
            float: left;
            background-color: #eee;
            color: #444;
            animation-name: animateBtn;
            animation-duration: 1s;
            animation-delay: 1.2s;
            animation-fill-mode: backwards;
        }

        .btn-right{
            float: right;
            background-color: transparent;
            color: #eee;
            animation-name: animateBtn;
            animation-duration: 1s;
            animation-delay: 2s;
            animation-fill-mode: backwards;
        }

        @keyframes  moveToLeft{
            0% {
                transform: translateX(120px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes  animateBtn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .animation-area{
            width: 100%;
            height: 100vh;
        }

        .box-area{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .box-area li{
            position: absolute;
            display: block;
            list-style: none;
            width: 25px;
            height: 25px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 20s linear infinite;
            bottom: -150px;
        }

        .box-area li:nth-child(1){
            left: 86%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .box-area li:nth-child(2){
            left: 12%;
            width: 30px;
            height: 30px;
            animation-delay: 1.5s;
            animation-duration: 10s;
        }

        .box-area li:nth-child(3){
            left: 70%;
            width: 100px;
            height: 100px;
            animation-delay: 5.5s;
        }

        .box-area li:nth-child(4){
            left: 42%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 15s;
        }

        .box-area li:nth-child(5){
            left: 65%;
            width: 40px;
            height: 40px;
            animation-delay: 0s;
        }

        ul.box-area{
            pointer-events: none; 
        }

        .box-area li:nth-child(6){
            left: 15%;
            width: 110px;
            height: 110px;
            animation-delay: 3.5s;

        }

        .btn-container{
            width: 36%;
            margin-left: 32%;
        }

        @keyframes  animate{
            0%{
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100%{
                transform: translateY(-800px) rotate(360deg);
                opacity: 0;
            }
        }
</style>
<div class="container">
    <div class="banner">
        <h1>HRMIS</h1>
        <h4>IPCR Modules</h4>
        <div class="btn-container">
          
                 <form method="GET"  action='/dashboard'>
                    <button type="submit" class="btn-left">Employee</button>
                 </form>

               <form method="GET"  action="<?php echo e(URL::to('admin/dashboard')); ?>">
                    <button type="submit" class="btn-right">Admin</button>
                </form>
 
        </div>
    </div>

    <div class="animation-area">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

</div>