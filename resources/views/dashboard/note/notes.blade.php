@extends('dashboard.layouts.master')

@section('note', 'current')
@section('title', 'یاداشت ها')

@section('body')

    <div class="row bg-white rounded border text-dark p-3 col-12">
        @php
        $title=session()->get('title');
        if(!empty($title)){
        echo '<div class="alert alert-success">';
            echo 'پست <strong>'.$title.'</strong> با موفقیت حذف شد!';
            echo "</div>";
        }
        @endphp

        <div class="col-12 border rounded shadow mb-2 p-2">
            <a href="{{ route('note.add') }}" class="btn btn-outline-success">یاداشت جدید</a>
        </div>
        <table class="table table-dark text-center table-striped rounded m-0">
            <thead>
                <tr>
                    <th>موضوع</th>
                    <th>تاریخ انتشار</th>
                    <th>مدیریت</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($article as $item)
                    <tr>
                        <td class="small">{{ $item->title }}</td>
                        <td class="small">{{ $item->time() }}</td>
                        <td class="d-flex justify-content-center">
                            <form action="{{ route('note.delete') }}" method="POST">
                                @csrf
                                @method("delete")
                                <input type="hidden" name="post_id" value="{{ $item->id }}" />
                                <input type="submit" class="btn btn-danger px-3" value="حذف" />
                            </form>
                            <a href="{{ route('note.view', $item->id) }}"
                                class="btn btn btn-outline-info text-white mx-2 px-3">نمایش و ویرایش</a>
                            <label class="switch">
                                <input type="checkbox" {{ $item->status == 1 ? 'checked' : '' }}
                                    onclick="ChangePostStatus({{ $item->id }})">
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('ex-js')
    <script>
        function ChangePostStatus(id) {

            var xhr = new XMLHttpRequest();
            xhr.withCredentials = true;

            xhr.addEventListener("readystatechange", function() {
                if (this.readyState === 4) {
                    alert("وضعیت یادداشت با موفقیت تغیر کرد.");
                }
            });

            xhr.open("GET", "/admin/status/" + id);

            xhr.send();
        }

    </script>
@endsection
