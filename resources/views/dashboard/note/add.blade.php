@extends('dashboard.layouts.master')

@section('note', 'current')
@section('title', 'افزودن یادداشت')

@section('body')

    <div class="row bg-white rounded border text-dark p-3 col-12">
        @if (!empty($errors->all()))
            <div class="alert alert-danger mx-auto col-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('note.save') }}" method="POST"
            class="ltr text-dark col-9 mx-auto border border-primary rounded p-3" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
            <div id="postform">
                <div class="form-group">
                    <input name="title" type="text" @change="slug" class="form-control rtl" placeholder="افزودن موضوع ..."
                        required>
                </div>

                <div class="form-group">
                    <input name="ex-title" type="text" class="form-control rtl" placeholder="افزودن زیرموضوع ..." />
                </div>

                <div class="form-group">
                    <input name="slug" :value="name" type="text" class="form-control rtl" placeholder="افزودن نامک ..."
                        required>
                </div>
            </div>

            {{-- <div class="form-group">
                <select name="category" class="form-control rtl" required>
                    @php
                    foreach (request()->categories->all() as $item){
                    echo "<option value='".$item[' id']."''>".$item['title']."</option>";
                    }
                    @endphp
                </select>
            </div> --}}

            <div class="form-group">
                <input type="text" name="tags" class="form-control rtl"
                    placeholder="تگ های خود را با کاما جدا کنید مانند : رضا,شیخ" required>
            </div>

            {{-- <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div> --}}

            <div class="form-group">
                <textarea name="content" id="content" required></textarea>
            </div>
            <input type="submit" class="btn btn-success col-3 mt-3" value="ثبت">
        </form>
    </div>
@endsection

@section('ex-js')
    <script src="/styles/js/summernote.min.js"></script>
    <script>
        $.ajax({
            url: "https://api.github.com/emojis",
            async: false
        }).then(function(data) {
            window.emojis = Object.keys(data);
            window.emojiUrls = data;
        });

        $('#content').summernote({
            placeholder: 'متن مقاله',
            tabsize: 4,
            height: 220,
            fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48'],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['codeview']]
            ],
            hint: [{
                    match: /:([\-+\w]+)$/,
                    search: function(keyword, callback) {
                        callback($.grep(emojis, function(item) {
                            return item.indexOf(keyword) === 0;
                        }));
                    },
                    template: function(item) {
                        var content = emojiUrls[item];
                        return '<img src="' + content + '" width="20" /> :' + item + ':';
                    },
                    content: function(item) {
                        var url = emojiUrls[item];
                        if (url) {
                            return $('<img />').attr('src', url).css('width', 20)[0];
                        }
                        return '';
                    }
                },
                {
                    mentions: ['jayden', 'sam', 'alvin', 'david'],
                    match: /\B@(\w*)$/,
                    search: function(keyword, callback) {
                        callback($.grep(this.mentions, function(item) {
                            return item.indexOf(keyword) == 0;
                        }));
                    },
                    content: function(item) {
                        return '@' + item;
                    }
                }
            ]
        });

        var msg = "<?= session()->get('msg') ?>";
        if (msg != "") {
            alert(msg);
            document.location.href="<?=route('notes')?>";
        }

    </script>
@endsection
