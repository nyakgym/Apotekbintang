<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Login Apotek Bintang</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background-image: url('../img/image2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        /* Login Card */
        .login-card {
            width: 550px;
            background: rgba(255, 255, 255, .5);
            padding: 2rem;
            border-radius: 10px;
            position: relative;
        }

        /* .login-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, .3);
            transform: rotate(-6deg);
            border-radius: 10px;
            z-index: -1;
        } */

        /* Login Card Logo */
        .login-card-logo {
            margin-bottom: 5rem;
        }

        .login-card-logo img {
            width: 60px;
        }

        /* ---------- */

        /* Login Card Standard */
        .login-card-logo,
        .login-card-header,
        .login-card-footer {
            text-align: center;
        }

        .login-card a {
            text-decoration: none;
            color: #35339a;
        }

        .login-card a:hover {
            text-decoration: underline;
        }

        /* Login Card Header */
        .login-card-header {
            margin-bottom: 2rem;
        }

        .login-card-header h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: .5rem;
        }

        .login-card-header h1+div {
            font-size: calc(1rem * .8);
            opacity: .8;
        }

        /* Login Card Form */
        .login-card-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .login-card-form .form-item {
            position: relative;
        }

        .login-card-form .form-item .form-item-icon {
            position: absolute;
            top: .82rem;
            left: 1.4rem;
            font-size: 1.3rem;
            opacity: .4;
        }

        .login-card-form .checkbox {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .login-card-form .form-item-other {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: calc(1rem * .8);
            margin-bottom: .5rem;
        }

        /* Login Card Footer */
        .login-card-footer {
            margin-top: 1.5rem;
            font-size: calc(1rem * .8);
        }

        /* Login Card Form Elements */
        .login-card input[type="text"],
        .login-card input[type="password"],
        .login-card input[type="email"] {
            border: none;
            outline: none;
            background: rgba(255, 255, 255, .3);
            padding: 1rem 1.5rem;
            padding-left: calc(1rem * 3.5);
            border-radius: 100px;
            width: 100%;
            transition: background .5s;
        }

        .login-card input:focus {
            background: white;
        }

        .login-card input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #7AA874;
        }

        .login-card button {
            background: #7AA874;
            color: white;
            padding: 1rem;
            border-radius: 100px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: background .5s;
        }

        .login-card button:hover {
            background-color:#7AA874(0, 0, 0, 0.85);
            cursor: pointer;
        }

        /* Login Card Social Buttons */
        .login-card-social {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            text-align: center;
            margin-top: 3rem;
        }

        .login-card-social>div {
            opacity: .8;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: calc(1rem * .8);
        }

        .login-card-social-btns {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .login-card-social-btns a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #7AA874;
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, .6);
            border-radius: 100px;
            transition: all .5s;
        }

        .login-card-social-btns a:hover {
            background-color: white;
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 768px) {

            body {
                padding: 2rem 0;
            }

            .login-card {
                width: 280px;
                padding: 2rem;
            }

        }

        *:where(:not(html, iframe, canvas, img, svg, video):not(svg *, symbol *)) {
            display: revert;
        }

        /* Preferred box-sizing value */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Reapply the pointer cursor for anchor tags */
        a,
        button {
            cursor: revert;
        }

        /* Remove list styles (bullets/numbers) */
        ol,
        ul,
        menu {
            list-style: none;
        }

        /* For images to not be able to exceed their container */
        img {
            max-width: 100%;
        }

        /* removes spacing between cells in tables */
        table {
            border-collapse: collapse;
        }

        /* Safari - solving issue when using user-select:none on the <body> text input doesn't working */
        input,
        textarea {
            -webkit-user-select: auto;
        }

        /* revert the 'white-space' property for textarea elements on Safari */
        textarea {
            white-space: revert;
        }

        /* minimum style to allow to style meter element */
        meter {
            -webkit-appearance: revert;
            appearance: revert;
        }

        /* reset default text opacity of input placeholder */
        ::placeholder {
            color: unset;
        }

        /* fix the feature of 'hidden' attribute.
   display:revert; revert to element instead of attribute */
        :where([hidden]) {
            display: none;
        }
    </style>
</head>

<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <h2>APOTEK BINTANG</h2>
                <div>Penjelasan Alamat Apotek</div>
            </div>
            <div class="login-card-header">
                <h1>Login</h1>

            </div>
            <form class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" placeholder="Enter Email or Username" id="emailForm" autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" placeholder="Enter Password" id="passwordForm" required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div>
                    <a href="#">forgot my password</a>
                </div>
                <button href= "dashboard.blade.php" type="submit">Login</button>
            </form>
        </div>
    </div>

</body>
</html