<?php
include('server/connection.php');

if (isset($_POST['update_video'])) {
    $video_id = $_GET['view'];
     
    $link= $_POST['link'];

  
    $stmt = $conn->prepare("SELECT * FROM youtube_videos WHERE unique_id = ?");
    $stmt->bind_param('i', $video_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if (!empty($result)) {
       
        $stmt = $conn->prepare("UPDATE youtube_videos SET youtube_url= ? WHERE unique_id = ?");
        $stmt->bind_param('si', $link, $video_id);

        if ($stmt->execute()) {
            header('Location: video?id=' . urlencode($video_id) . '&message=edited%20successfully');
            exit;
        } else {
            header('Location: video?error=there_is_an_error');
            exit;
        }
    } else {
        
        header('Location: video?error=URL not_found');
        exit;
    }
}

header('Location: dashboard');
exit;
?>
