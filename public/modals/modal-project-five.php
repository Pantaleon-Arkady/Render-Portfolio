<div id="modal-project-five" class="project-modal">
    <div class="flex-div">
        <div class="close-project-div">
            <button class="close cursor" onclick="closeProjectFive()">&times;</button>
        </div>

        <div class="modal-content">
            <?php
            $projectImages = [
                'files/project-five/projectFive-1.jpg',
                'files/project-five/projectFive-2.jpg',
                'files/project-five/projectFive-3.jpg',
                'files/project-five/projectFive-4.jpg',
            ];

            foreach ($projectImages as $index => $imgPath):
                $orientation = getOrientationClass($imgPath);
                $slideNum = $index + 1;
                $totalSlides = count($projectImages);
            ?>
                <div class="each-slide <?= $orientation ?>" data-index="<?= $index ?>">
                    <div class="slide-number"><?= $slideNum ?> / <?= $totalSlides ?></div>
                    <img src="<?= htmlspecialchars($imgPath) ?>" alt="Project One - Image <?= $slideNum ?>">
                </div>
            <?php endforeach; ?>

            <!-- Navigation Arrows -->
            <?php if ($totalSlides > 1): ?>
                <button class="nav-arrow prev-arrow" onclick="changeSlide(-1)">&#8249;</button>
                <button class="nav-arrow next-arrow" onclick="changeSlide(1)">&#8250;</button>
            <?php endif; ?>
        </div>
    </div>
</div>