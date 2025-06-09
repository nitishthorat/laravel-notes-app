<x-layout>
    <div class="note-container single-note">
        <h1>Create New Note</h1>
        <form action="{{route('note.store')}}" method="POST" class="note">
            <textarea name="note" class="note-body" id="" cols="30" rows="10" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
                <a href="class-submit-button">Submit</a>
            </div>
        </form>
    </div>
</x-layout>
