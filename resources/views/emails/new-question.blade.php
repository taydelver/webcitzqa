

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <style>
        .wqa-mail-container {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            padding: 20px;
        }
        h2 {
            font-weight: bold;
        }
        .info-item {
            margin-bottom: 10px;
            border-top: 1px solid #eee;
            padding-top: 10px;
            font-size: 14px;
        }
        .info-item > span {
            margin-right: 8px;
            font-weight: bold;
        }
    </style>
    <div class="wqa-mail-container">
        <div class="inner">
            <h2>You have a new question on your website.</h2>
            <div class="content">
                <div class="info-item">
                    <span class="label">Website:</span>
                    {{ $question->storefront->name }}
                </div>
                <div class="info-item">
                    <span class="label">Contact Email:</span>
                    {{ $question->contact_email }}
                </div>
                <div class="info-item">
                    <span class="label">Product:</span>
                    {{ $question->product_name }}
                </div>
                <div class="info-item">
                    <span class="label">Date:</span>
                    {{ $question->post_date }}
                </div>
                <div class="info-item">
                    <span class="label">Question:</span>
                    {{ $question->content }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
