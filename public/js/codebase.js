window.function_js = {
    helpers: function (helperName, options) {
        if (helperName === "jq-notify") {
            // Memastikan elemen body ada
            const body = document.body;

            // Membuat elemen notifikasi
            const notification = document.createElement('div');
            notification.classList.add('jq-notify');
            notification.classList.add(options.type); // Menambahkan kelas tipe notifikasi (success, error, dll)

            // Menambahkan ikon
            const icon = document.createElement('i');
            icon.classList.add(...options.icon.split(' '));
            icon.style.marginRight = '10px'; // Menambahkan jarak antara ikon dan teks
            notification.appendChild(icon);

            // Menambahkan pesan notifikasi
            const message = document.createElement('span');
            message.classList.add('message');
            message.textContent = options.message;
            notification.appendChild(message);

            // Menambahkan ke body
            body.appendChild(notification);

            // Menambahkan styling langsung dengan JavaScript
            notification.style.position = 'fixed';
            notification.style.padding = '15px';
            notification.style.borderRadius = '8px';
            notification.style.display = 'flex';
            notification.style.alignItems = 'center';
            notification.style.opacity = '1';
            notification.style.minWidth = '250px';
            notification.style.maxWidth = '400px';
            notification.style.color = 'white';
            notification.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)';
            notification.style.transition = 'opacity 0.3s ease-in-out';
            notification.style.zIndex = '9999';

            // Menentukan background-color berdasarkan tipe notifikasi dan menambahkan transparansi
            if (options.type === 'info') {
                notification.style.backgroundColor = 'rgba(23, 162, 184, 0.8)'; // Biru untuk info dengan transparansi
            } else if (options.type === 'success') {
                notification.style.backgroundColor = 'rgba(40, 167, 69, 0.7)'; // Hijau untuk success dengan transparansi
            } else if (options.type === 'error') {
                notification.style.backgroundColor = 'rgba(220, 53, 69, 0.8)'; // Merah untuk error dengan transparansi
            } else if (options.type === 'warning') {
                notification.style.backgroundColor = 'rgba(255, 193, 7, 0.8)'; // Kuning untuk warning dengan transparansi
            }

            // Menampilkan notifikasi dengan posisi dan animasi
            notification.style[options.from] = '20px';  // Posisi dari atas/bawah
            notification.style[options.align] = '20px'; // Posisi dari kiri/kanan

            // Mengatur durasi notifikasi
            setTimeout(() => {
                notification.style.opacity = 0;
                setTimeout(() => {
                    notification.remove();
                }, 300); // Waktu untuk menghapus setelah fade out
            }, 5000); // Durasi muncul notifikasi (5 detik)
        }
    }
};
