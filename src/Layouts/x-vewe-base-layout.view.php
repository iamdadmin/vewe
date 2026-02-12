<!DOCTYPE html>
<html lang="en">
<head>
    <x-slot name="head">
        <x-vewe-head :title="$title ?? 'Vewe UI for Tempest'" />
    </x-slot>
</head>
<body :class="$class ?? 'antialiased text-default bg-default scheme-light dark:scheme-dark dark:prose-invert'">
    
<x-slot name="page-header">
    <x-vewe-header :title="$title ?? null" />
</x-slot>

<x-slot />

<x-slot name="page-footer">
    <footer>Test</footer>
</x-slot>

<x-slot name="body-scripts">
    <!-- liveReloader Client Script -->
    <script>
    (function() {
        const ws = new WebSocket('ws://localhost:58008');
        
        ws.onopen = () => console.log('liveReloader: Connected');
        
        ws.onmessage = (event) => {
            const data = JSON.parse(event.data);
            if (data.type === 'reload') {
                console.log('liveReloader: Reloading...', data.file);
                location.reload();
            }
        };
        
        ws.onclose = () => console.log('liveReloader: Disconnected');
        ws.onerror = (error) => console.error('liveReloader: Error', error);
    })();
    </script>
</x-slot>
</body>
</html>
