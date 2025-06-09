<x-layout>
    <div class="note-container single-note">
        <h1>Edit Your Note</h1>
        <form action="{{route('note.update', $note)}}" method="POST" class="note">
            <textarea name="note" id="" cols="30" rows="10" class="note-body">
                {{$note->note}}</textarea>
        </form>
        <div class="note-buttons">
            <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
            <button class="note-submit-button">Submit</button>
        </div>
    </div>
</x-layout>