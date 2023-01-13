<form action="{{ route('comics.destroy', $comic) }}" method="POST"
    onsubmit="return confirm('confermi l\'eliminazione di {{ $comic->title }}')">
    @csrf
    @method('DELETE')

    <button title="Delete" type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>
    </button>
</form>
