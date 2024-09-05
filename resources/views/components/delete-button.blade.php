<form action="{{ $href }}"
    method="POST" class="d-inline" id="deleteForm-{{ $id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-sm btn-danger">
        <i class="fe fe-trash-2 fa-2x"
            onclick="confirmDelete({{ $id }})"></i></button>
</form>
