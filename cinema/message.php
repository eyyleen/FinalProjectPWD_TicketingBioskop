<?php
include 'ceklog.php';
$link = mysqli_connect("localhost", "root", "", "cinema");

$query = "SELECT * FROM feedbacktable ORDER BY msgID DESC";
$result = mysqli_query($link, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($link));
}
?>
<style>
    body {
        background-color: #181827;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #ffcc00;
        margin: 30px 0;
    }

    .admin-section-header {
        color: #FFF;
        background-color: #3a3a3a;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .admin-logo {
        font-size: 24px;
        font-weight: bold;
    }

    .admin-login-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .admin-login-info i, .admin-login-info a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .admin-user-avatar {
        width: 40px;
        border-radius: 50%;
    }

    /* Feedback bubble styling */
    .feedback-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
        max-width: 300px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .feedback-item {
        background: linear-gradient(145deg, #2e2e48, #1f1f36);
        border-left: 5px solid #ffd700;
        border-radius: 18px;
        padding: 20px 25px;
        color: #f1f1f1;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        animation: fadeInUp 0.5s ease both;
    }

    .feedback-item:hover {
        transform: scale(1.015);
        box-shadow: 0 10px 25px rgba(255, 215, 0, 0.2);
    }

    .feedback-header {
        margin-bottom: 10px;
    }

    .sender-name {
        font-weight: 700;
        font-size: 18px;
        color: #ffd700;
    }

    .sender-email {
        font-size: 13px;
        color: #aaa;
        font-style: italic;
    }

    .feedback-message {
        font-size: 15px;
        line-height: 1.6;
        color: #eaeaea;
        white-space: pre-wrap;
        margin-top: 10px;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media screen and (max-width: 768px) {
        .feedback-item {
            padding: 15px;
        }

        .sender-name {
            font-size: 16px;
        }

        .feedback-message {
            font-size: 14px;
        }
    }.feedback-label {
    font-size: 13px;
    color: #555;
    margin-bottom: 8px;
    font-style: italic;
}
.btn-back-admin {
    display: inline-block;
    margin: 30px auto 10px;
    padding: 10px 20px;
    background-color: #ffd700;
    color: #1f1f36;
    font-weight: bold;
    text-decoration: none;
    border-radius: 30px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.btn-back-admin:hover {
    background-color: #e6c200;
    transform: translateY(-2px);
}
.admin-logo {
    text-decoration: none;
    color: white;
    font-size: 24px;
    font-weight: bold;
    padding: 20px 10px;
    display: block;
}



</style>

<!-- Header -->
<div class="admin-section-header">
<a href="admin.php" class="admin-logo">SINEMACUYY</a>
    <div class="admin-login-info">
        <i class="far fa-bell"></i>
        <i class="far fa-comment-alt"></i>
        <a href="#">Welcome, <?= htmlspecialchars($_SESSION['email']); ?></a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<!-- Feedback Messages -->
<h1>Feedback dari Pengguna</h1>
<a href="admin.php" class="btn-back-admin">← Kembali ke Halaman Admin</a>

<div class="feedback-list">
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="feedback-item">
            <div class="feedback-header">
                <div class="sender-name"><?= htmlspecialchars($row['senderfName'] . ' ' . $row['senderlName']) ?></div>
                <div class="sender-email"><?= htmlspecialchars($row['sendereMail']) ?></div>
            </div>
            <div class="feedback-label">User ini menyampaikan pesan berikut:</div>
            <div class="feedback-message">
                <?= nl2br(htmlspecialchars($row['senderfeedback'])) ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>
