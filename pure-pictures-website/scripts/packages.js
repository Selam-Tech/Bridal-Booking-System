function showPackage(pkg, type) {

    const video = document.getElementById(`video${pkg}`);
    const price = document.getElementById(`price${pkg}`);

    if (pkg === 1) {
        if (type === 'classic') {
            video.src = "../assets/videos/p1-classic.mp4";
            price.innerText = "80,000 Birr";
        } else {
            video.src = "../assets/videos/p1-premium.mp4";
            price.innerText = "130,000 Birr";
        }
    }

    if (pkg === 2) {
        if (type === 'classic') {
            video.src = "../assets/videos/p2-classic.mp4";
            price.innerText = "120,000 Birr";
        } else {
            video.src = "../assets/videos/p2-premium.mp4";
            price.innerText = "170,000 Birr";
        }
    }

    if (pkg === 3) {
        if (type === 'classic') {
            video.src = "../assets/videos/p3-classic.mp4";
            price.innerText = "200,000 Birr";
        } else {
            video.src = "../assets/videos/p3-premium.mp4";
            price.innerText = "250,000 Birr";
        }
    }

    video.load(); // 🔥 IMPORTANT
}