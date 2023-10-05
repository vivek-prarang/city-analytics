<div>
    <div wire:loading class="loading-state">
        Loading...
    </div>
    <div wire:loading.remove>
        @foreach ($data as $items)
            {{ $items }}
        @endforeach
    </div>

</div>

<script>
    mounted() {
        setTimeout(() => {
            this.loadData();
        }, 2000);
    }
</script>
