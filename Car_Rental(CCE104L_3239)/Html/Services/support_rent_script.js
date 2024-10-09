
    document.addEventListener('DOMContentLoaded', function() {
        // Handle the services dropdown toggle
        const serviceItem = document.querySelector('#Service');
        const serviceDropdown = document.querySelector('.drop_service');
        
        serviceItem.addEventListener('click', function(e) {
            e.preventDefault();
            serviceDropdown.style.display = (serviceDropdown.style.display === 'block') ? 'none' : 'block';
        });

        // Handle the profile dropdown toggle
        const profileItem = document.querySelector('#profile');
        const profileDropdown = document.querySelector('.drop_profile');
        
        profileItem.addEventListener('click', function(e) {
            e.preventDefault();
            profileDropdown.style.display = (profileDropdown.style.display === 'block') ? 'none' : 'block';
        });

        // Close dropdowns if clicking outside
        document.addEventListener('click', function(event) {
            if (!serviceItem.contains(event.target) && !serviceDropdown.contains(event.target)) {
                serviceDropdown.style.display = 'none';
            }
            if (!profileItem.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.style.display = 'none';
            }
        });
    });

