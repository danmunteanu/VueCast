<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <title>Vue Play</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes spinner {
            to {transform: rotate(360deg);}
        }
        
        .is-loading { color: transparent; }

        .is-loading:before {
            content: '';
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-top: -10px;
            margin-left: -10px;
            border-radius: 50%;
            border: 2px solid transparent;
            border-top-color: #07d;
            border-bottom-color: #07d;
            animation: spinner .8s ease infinite;
        }
    </style>
</head>

<body class="h-full grid place-items-center">

    <div id="app">
        <app-button :processing="true">Click Me!</app-button>
    </div>

    <script type="module">
        
        //  One source of truth
        import App from "./js/components/App.js";

        //  Create The App
        Vue.createApp (App).mount ('#app');
    </script>

</body>

</html>