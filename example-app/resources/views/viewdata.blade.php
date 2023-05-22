<html>

<body>
    <div>
        @php
           @foreach ($users as $stud) : ?>
            Hello, <?php echo $user->firstName; ?> <br />
           @endforeach
           @endphp

    </div>
</body>

</html>