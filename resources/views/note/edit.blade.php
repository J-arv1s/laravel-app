<x-layout>
    <h1>Edit!</h1>
    <div class="note-container single-note">
        <form action="{{ route('note.update', $note) }}" method="post" class="note">
            <textarea name="note" cols="24" rows="10" class="note-body" placeholder="Update note here">
                {{ $note->note }}
            </textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
