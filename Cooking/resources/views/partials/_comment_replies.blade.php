@foreach($comments as $comment)
    <div class="display-comment">
        <strong>ชื่อ : {{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <p><b>เวลา :</b> {{ $comment->created_at }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}" onSubmit="JavaScript:return fncSubmit();">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" required />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning" type="submit" value="ตอบ" title="Reply" name="formemp" id="insert" onclick="IsEmpty();"/><i class="fa fa-reply" aria-hidden="true"></i> ตอบ</button>
            {{-- <p>{{  $comment->user_id }}</p>
            <p>{{  $comment->id }}</p>
            <p>{{ $user_id }}</p> --}}
            @if($comment->user_id == $user_id)
                <a href="{{ route('comment.delete', $comment->id, $comment->user_id) }}" type="submit" class="btn btn-danger"  value="ลบ" title="Delete"/><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</a>
            @endif
            </div>
            <div class="form-group">

            </div>
        </form>
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>

    <script language="javascript">
        function fncSubmit()
        {
            if(document.form1.formemp.value == "")
            {
                alert('Please input Input 1');
                document.form1.formemp.focus();
                return false;
            }
            document.form1.submit();
        }
        </script>

@endforeach
