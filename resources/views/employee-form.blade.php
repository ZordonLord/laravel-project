<form name="employee-form" id="employee-form" method="post" action="{{ url('store-form') }}">
    @csrf
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="surname">Фамилия работника</label>
        <input type="text" id="surname" name="surname" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="position">Занимаемая должность</label>
        <input type="text" id="position" name="position" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="address">Адрес проживания</label>
        <input type="text" id="address" name="address" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="workData">Описание работы</label>
        <textarea name="workData" id="workData" class="form-control" required="true"></textarea>
    </div>
    <div class="form-group">
        <label for="jsonData">JSON данные</label>
        <textarea name="jsonData" id="jsonData" class="form-control" required="true">{"field1":"значение1","field2":"значение2"}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 