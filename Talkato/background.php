<style>
  .background {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: linear-gradient(90deg, black, blue, rgb(39, 53, 248), blue, black);
        }

        .box div {
            position: absolute;
            width: 60px;
            height: 60px;
            background-color: transparent;
            border: 12px solid rgb(127, 209, 209);
        }

        .box div:nth-child(1) {
            top: 12%;
            left: 42%;
            animation: animate 10s linear infinite;
        }

        .box div:nth-child(2) {
            top: 70%;
            left: 50%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(3) {
            top: 52%;
            left: 92%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(4) {
            top: 2%;
            left: 12%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(5) {
            top: 30%;
            left: 4%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(6) {
            top: 72%;
            left: 2%;
            animation: animate 11s linear infinite;
        }

        .box div:nth-child(7) {
            top: 5%;
            left: 97%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(8) {
            top: 96%;
            left: 96%;
            animation: animate 4s linear infinite;
        }

        .box div:nth-child(9) {
            top: 35%;
            left: 72%;
            animation: animate 10s linear infinite;
        }

        .box div:nth-child(10) {
            top: 16%;
            left: 80%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(11) {
            top: 42%;
            left: 32%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(12) {
            top: 72%;
            left: 42%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(13) {
            top: 10%;
            left: 70%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(14) {
            top: 77%;
            left: 22%;
            animation: animate 11s linear infinite;
        }

        .box div:nth-child(15) {
            top: 92%;
            left: 52%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(16) {
            top: 20%;
            left: 90%;
            animation: animate 4s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: scale(0) translateY(0) rotate(0);
                opacity: 1;
            }

            100% {
                transform: scale(1.3) translateY(-90px) rotate(360deg);
                opacity: 0;
            }
        }
</style>














<div class="background">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
</div>