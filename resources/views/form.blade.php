<form method="POST" action="/store_form">
    @csrf
    <label for="first_name">Имя:</label>
    <input type="text" id="first_name" name="first_name" required><br>

    <label for="last_name">Фамилия:</label>
    <input type="text" id="last_name" name="last_name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <button type="submit">Отправить</button>
</form> 