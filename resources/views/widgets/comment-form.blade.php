@auth()
    <form action="{{ route('dialogues.comments.store', $dialog->id) }}" method="POST">
        @csrf
        <div class="form-group" id="commentbox">
            <input name="comment" type="text" class="form-control border-0" id="formGroupExampleInput" placeholder="Your Comments...">
        </div>
        @error('comment')
            <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
        @enderror
        <button class="btn btn-dark" type="submit" id="share-btn">SHARE</button>
    </form>
@endauth
