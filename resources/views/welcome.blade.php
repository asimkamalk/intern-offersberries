<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-blue-100">
    <h3 class="text-2xl ml-10 bg-green-100  rounded-2xl p-5 w-32 ">Account Opening</h3>
    <div>
        <a href="{{ route('account.create')  }}">
            <button class="mt-10 ml-10 bg-green-500 px-1 py-2 rounded-2xl cursor-pointer">
                Account Opening
            </button>
        </a>
    </div>

    <div>
        <a href="{{route("account.list")}}">
            <button class="mt-10 ml-10 bg-green-500 px-4 py-2 rounded-2xl cursor-pointer">Account List</button>
        </a>
    </div>
    <hr class="mt-5">
</body>

</html>