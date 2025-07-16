<form method="POST" action="{{ url('/user') }}">
    @csrf
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" class="form-control" required maxlength="50">
    </div>
    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" id="surname" name="surname" class="form-control" required maxlength="50">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required pattern="^[\w\.-]+@[\w\.-]+\.\w{2,}$">
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form> 