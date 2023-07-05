<div class="copyright text-center">
    <p class="my-5 text-muted">&copy; <span class="copyright-year"></span> Test</p>
</div>

@push('script')
    <script>
        // copyright-year
        var yearElement = document.querySelector('.copyright-year');
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();
        if (yearElement) {
            yearElement.textContent = currentYear;
        }
    </script>
@endpush
