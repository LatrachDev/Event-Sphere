<form action="{{ route('checkout.session') }}" method="POST">
    @csrf
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Buy Ticket ($15)</button>
</form>
