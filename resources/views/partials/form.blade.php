<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="degree" name="type" value="degree" class="custom-control-input" @if($type == "degree" || empty($type)) checked @endif required>
                <label class="custom-control-label" for="degree">Градусы</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="radian" name="type" value="radian" class="custom-control-input" @if($type == "radian") checked @endif required>
              <label class="custom-control-label" for="radian">Радианы</label>
            </div>
        </div>
    </div>
    <input type="number" step="any" class="form-control border-dark" name="angle" id="angle" placeholder="Введите значение" value="{{ $angle or '' }}" required>
</div>

<div class="input-group mb-3 justify-content-center">
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="sin" name="operation" value="sin" class="custom-control-input" {{$checked['sin'] or ''}} required>
      <label class="custom-control-label" for="sin">синус « sin »</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="cos" name="operation" value="cos" class="custom-control-input" {{$checked['cos'] or ''}} required>
      <label class="custom-control-label" for="cos">косинунс « cos »</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="tg" name="operation" value="tg" class="custom-control-input" {{$checked['tg'] or ''}} required>
      <label class="custom-control-label" for="tg">тангенс « tg »</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="ctg" name="operation" value="ctg" class="custom-control-input" {{$checked['ctg'] or ''}} required>
      <label class="custom-control-label" for="ctg">котангенс « ctg »</label>
    </div>
</div>

<button type="submit" name="calculate" class="btn btn-light border-dark btn-block">Вычислить</button>
