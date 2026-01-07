<div
    id="modal-project-one"
    class="fixed inset-0 z-50 hidden bg-black/90"
>
    <!-- Modal wrapper -->
    <div class="min-h-screen flex flex-col">

        <!-- Close button row -->
        <div class="flex justify-end p-4">
            <button
                onclick="closeProjectOne()"
                class="text-white text-4xl leading-none hover:text-gray-300"
                aria-label="Close modal"
            >
                &times;
            </button>
        </div>

        <!-- Content -->
        <div class="relative flex-1 flex items-center justify-center px-4 pb-8">

            <?php
            $projectImages = [
                'files/project-one/projectOne-1.jpg',
                'files/project-one/projectOne-2.jpg',
                'files/project-one/projectOne-3.jpg',
                'files/project-one/projectOne-4.jpg',
                'files/project-one/projectOne-5.jpg',
                'files/project-one/projectOne-6.jpg',
                'files/project-one/projectOne-7.jpg',
                'files/project-one/projectOne-8.jpg'
            ];

            $totalSlides = count($projectImages);

            foreach ($projectImages as $index => $imgPath):
                $slideNum = $index + 1;
            ?>
                <div
                    class="each-slide hidden w-full text-center"
                    data-index="<?= $index ?>"
                >
                    <!-- Slide counter -->
                    <div class="absolute top-6 left-1/2 -translate-x-1/2
                                bg-black/60 text-white text-sm
                                px-4 py-1 rounded-full">
                        <?= $slideNum ?> / <?= $totalSlides ?>
                    </div>

                    <img
                        src="<?= htmlspecialchars($imgPath) ?>"
                        alt="Project One – Image <?= $slideNum ?>"
                        class="max-h-[85vh] max-w-[95vw] mx-auto object-contain rounded-lg"
                    />
                </div>
            <?php endforeach; ?>

            <?php if ($totalSlides > 1): ?>
                <!-- Prev -->
                <button
                    onclick="changeSlide(-1)"
                    class="absolute left-4 top-1/2 -translate-y-1/2
                           text-white text-5xl
                           bg-black/50 hover:bg-black/70
                           w-14 h-24 rounded-lg"
                    aria-label="Previous slide"
                >
                    &#8249;
                </button>

                <!-- Next -->
                <button
                    onclick="changeSlide(1)"
                    class="absolute right-4 top-1/2 -translate-y-1/2
                           text-white text-5xl
                           bg-black/50 hover:bg-black/70
                           w-14 h-24 rounded-lg"
                    aria-label="Next slide"
                >
                    &#8250;
                </button>
            <?php endif; ?>

        </div>
    </div>
</div>
