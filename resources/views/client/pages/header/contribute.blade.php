@extends('client.layout.indexlayout');
@section('title')
    Đóng góp ý kiến | Earth
@endsection

@section('content')
    <div class="container_contribute">
        <form action="" method="">
            @csrf
            <label for="subject">Viết đóng góp cho chúng tôi</label>
            <textarea id="subject" class="subject" name="subject" placeholder="Bạn có ý tưởng gì..." style="height:200px"></textarea>

            <input type="submit" class="btn-contribute" value="Gửi">
        </form>
    </div>
    <div class="container_contribute" id="thongbao">
        <h4>Cám ơn bạn, đóng góp của bạn đã được gửi tới chúng tôi !</h4>
    </div>
    <style>
        .container_contribute h4 {
            color: red;
        }
        .container_contribute form label{
            color: var(--color-color);
            font-weight: 600;
            font-size: 20px;
        }
        .container_contribute {
            border-radius: 5px;
            background-color: var(--bg-color);
            border:2px solid var(--border-color);
            margin: 80px auto;
            width: 60%;
            padding: 30px;
        }

        textarea.subject {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: var(--color-color);
            box-sizing: border-box;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: none;
            background-color: var(--bg-color);

        }

        input[type=submit].btn-contribute {
            background-color: var(--header-color);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            font-size: 17px;
        }

        input[type=submit].btn-contribute:hover {
            opacity: .7;
        }
    </style>
@endsection
