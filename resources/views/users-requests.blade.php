@if(isset($requests))
    <div class="card">
    @foreach($requests as $request)
            <h5 class="card-header">Заявка #</h5>
            <div class="card-body">
                <h5 class="card-title">'.$username.'</h5>
                <p class="card-text">Email: '.$email.' <br> Номер телефона: '.$phone.' <br> Сообщение: "'.$requestText.'" <br> '.$date_created.'</p>
{{--                <form action="update_status.php" method="POST" style="display:flex;justify-content:center;">--}}
{{--                    <button style="margin-bottom: 10px;" class="btn btn-danger" id="updateButton" value="2" name="newStatus">Скрыть</button>--}}
{{--                    <input type="hidden" id="id" name="id" value="'.$id.'">--}}
{{--                </form>--}}
            </div>
    @endforeach
        </div>
@endif
