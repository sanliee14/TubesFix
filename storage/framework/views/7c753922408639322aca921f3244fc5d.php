<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
        body {
            background: linear-gradient(135deg, #c084fc 0%, #7c3aed 50%, #3730a3 100%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .header-section {
            text-align: center;
            padding: 20px 0 40px 0;
            position: relative;
        }

        .brand {
            color: #fbbf24;
            font-size: 18px;
            font-weight: 300;
            letter-spacing: 2px;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .brand-name {
            color: #fbbf24;
            font-size: 42px;
            font-weight: bold;
            font-style: italic;
            margin-bottom: 20px;
        }

        .hamburger {
            position: absolute;
            top: 20px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #000;
            border-radius: 2px;
        }

        .status-button {
            background: linear-gradient(45deg, #f8b4cb, #fecaca);
            color: #1f2937;
            padding: 12px 35px;
            border-radius: 25px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .status-card {
            background: linear-gradient(45deg, #fef3c7, #fbbf24);
            border-radius: 25px;
            padding: 25px 35px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .status-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .event-name {
            color: #1f2937;
            font-size: 22px;
            font-weight: 600;
            flex: 1;
        }

        .status-badge {
            background: linear-gradient(45deg, #c084fc, #a855f7);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            min-width: 120px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .status-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .status-badge.approved {
            background: linear-gradient(45deg, #34d399, #10b981);
        }

        .status-badge.approved:hover {
            background: linear-gradient(45deg, #10b981, #059669);
        }

        .status-badge.pending {
            background: linear-gradient(45deg, #fbbf24, #f59e0b);
        }

        .status-badge.pending:hover {
            background: linear-gradient(45deg, #f59e0b, #d97706);
        }

        .status-badge:hover {
            background: linear-gradient(45deg, #a855f7, #9333ea);
        }

        .event-details {
            color: #374151;
            font-size: 16px;
        }

        .py-12 {
            padding-top: 0;
            padding-bottom: 3rem;
        }
    </style>

    <!-- Header Section -->
    <div class="header-section">
        <button class="status-button">Status</button>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Status Sections -->
            <div class="space-y-5">
                <!-- Event Status Card -->
                <div class="status-card">
                    <div class="status-header">
                        <div class="event-name">Workshop Machine Learning</div>
                        <button class="status-badge approved" onclick="window.location.href='<?php echo e(route('user.detail-status')); ?>'">
                            Status
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/user/status.blade.php ENDPATH**/ ?>