<?php
// Simple PHP Landing Page
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>SnakeCoder Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top, #1f2933 0, #020617 55%, #000 100%);
            color: #e5e7eb;
        }
        .page {
            max-width: 960px;
            width: 100%;
            padding: 32px 20px;
        }
        .card {
            background: rgba(15, 23, 42, 0.92);
            border-radius: 18px;
            padding: 32px 28px;
            box-shadow: 0 22px 45px rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(148, 163, 184, 0.3);
            backdrop-filter: blur(18px);
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(22, 163, 74, 0.1);
            color: #bbf7d0;
            font-size: 11px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            border: 1px solid rgba(34, 197, 94, 0.4);
            margin-bottom: 14px;
        }
        .badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: radial-gradient(circle, #4ade80, #16a34a);
            box-shadow: 0 0 12px rgba(74, 222, 128, 0.9);
        }
        h1 {
            font-size: clamp(32px, 4vw, 40px);
            line-height: 1.1;
            margin-bottom: 10px;
        }
        h1 span {
            background: linear-gradient(120deg, #22c55e, #a855f7, #0ea5e9);
            -webkit-background-clip: text;
            color: transparent;
        }
        .subtitle {
            color: #9ca3af;
            max-width: 520px;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 24px;
        }
        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            margin-bottom: 26px;
        }
        .btn-primary {
            padding: 12px 22px;
            border-radius: 999px;
            border: none;
            outline: none;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #022c22;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 12px 25px rgba(34, 197, 94, 0.35);
            transition: transform 0.12s ease, box-shadow 0.12s ease, filter 0.12s ease;
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 30px rgba(34, 197, 94, 0.45);
            filter: brightness(1.05);
        }
        .btn-secondary {
            padding: 11px 18px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            background: rgba(15, 23, 42, 0.5);
            color: #e5e7eb;
            font-size: 13px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.12s ease, border-color 0.12s ease;
        }
        .btn-secondary:hover {
            background: rgba(30, 64, 175, 0.8);
            border-color: rgba(129, 140, 248, 0.8);
        }
        .pill {
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.9);
            border: 1px dashed rgba(148, 163, 184, 0.6);
            font-size: 11px;
            color: #9ca3af;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .pill span {
            color: #e5e7eb;
            font-weight: 500;
        }
        .grid {
            margin-top: 18px;
            display: grid;
            grid-template-columns: minmax(0, 2fr) minmax(0, 3fr);
            gap: 20px;
        }
        .feature-list {
            display: grid;
            gap: 10px;
            font-size: 13px;
            color: #e5e7eb;
        }
        .feature {
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }
        .feature-icon {
            width: 18px;
            height: 18px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            background: radial-gradient(circle, #22c55e, #16a34a);
            box-shadow: 0 0 10px rgba(72, 187, 120, 0.8);
        }
        .feature-title {
            font-weight: 600;
            margin-bottom: 2px;
        }
        .feature-desc {
            color: #9ca3af;
            font-size: 12px;
        }
        .code-card {
            background: radial-gradient(circle at top left, rgba(56, 189, 248, 0.18), transparent 55%),
                        radial-gradient(circle at bottom right, rgba(129, 140, 248, 0.2), transparent 55%),
                        rgba(15, 23, 42, 0.9);
            border-radius: 16px;
            padding: 16px 14px;
            border: 1px solid rgba(148, 163, 184, 0.5);
            position: relative;
            overflow: hidden;
        }
        .code-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 11px;
            color: #9ca3af;
        }
        .dots {
            display: flex;
            gap: 4px;
        }
        .dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
        }
        .dot.red { background: #f97373; }
        .dot.yellow { background: #facc15; }
        .dot.green { background: #22c55e; }
        pre {
            font-size: 11px;
            line-height: 1.5;
            color: #e5e7eb;
            overflow-x: auto;
            padding-top: 4px;
        }
        code {
            font-family: "JetBrains Mono", "Fira Code", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
        .glow {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 10% 0, rgba(94, 234, 212, 0.35), transparent 55%);
            mix-blend-mode: screen;
            opacity: 0.85;
            pointer-events: none;
        }
        .footer {
            margin-top: 18px;
            font-size: 11px;
            color: #6b7280;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
        }
        .footer span strong {
            color: #e5e7eb;
        }
        @media (max-width: 720px) {
            .card {
                padding: 24px 18px;
            }
            .grid {
                grid-template-columns: minmax(0, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="card">
            <div class="badge">
                <span class="badge-dot"></span>
                Sẵn sàng deploy với Docker
            </div>
            <h1>
                Xây ứng dụng nhanh hơn với <span>SnakeCoder</span>
            </h1>
            <p class="subtitle">
                Bộ khởi tạo dự án PHP + Docker giúp bạn đưa landing page hoặc MVP online trong vài phút.
                Chỉ cần build image, run container và tập trung vào sản phẩm của bạn.
            </p>

            <div class="cta-row">
                <button class="btn-primary" onclick="location.href='mailto:you@example.com'">
                    Bắt đầu hợp tác
                    <span>➜</span>
                </button>
                <button class="btn-secondary" onclick="document.getElementById('code-block').scrollIntoView({behavior: 'smooth'})">
                    Xem code mẫu
                </button>
                <div class="pill">
                    ⚡ Triển khai bằng
                    <span>docker build &amp; docker run</span>
                </div>
            </div>

            <div class="grid">
                <div class="feature-list">
                    <div class="feature">
                        <div class="feature-icon">1</div>
                        <div>
                            <div class="feature-title">Landing page hiện đại</div>
                            <div class="feature-desc">
                                Giao diện nhẹ, responsive, dễ tùy biến cho bất kỳ campaign hay sản phẩm nào.
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">2</div>
                        <div>
                            <div class="feature-title">Docker-ready</div>
                            <div class="feature-desc">
                                Đóng gói với PHP-Apache chính thức, chạy ổn định trên mọi server hỗ trợ Docker.
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">3</div>
                        <div>
                            <div class="feature-title">Triển khai trong phút chốc</div>
                            <div class="feature-desc">
                                Một lệnh build, một lệnh run — không cần cấu hình phức tạp.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code-card" id="code-block">
                    <div class="glow"></div>
                    <div class="code-header">
                        <div class="dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <span>Dockerfile</span>
                    </div>
                    <pre><code># Build &amp; run
docker build -t snakecoder-landing .
docker run -d -p 8080:80 --name snakecoder snakecoder-landing

# Mở trình duyệt:
http://localhost:8080</code></pre>
                </div>
            </div>

            <div class="footer">
                <span>© <?php echo date('Y'); ?> <strong>SnakeCoder</strong>. All rights reserved.</span>
                <span>Code chạy trong container PHP-Apache được tối ưu cho landing page.</span>
            </div>
        </div>
    </div>
</body>
</html>


