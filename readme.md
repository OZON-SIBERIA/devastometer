
php-fpm - по http будет принимать краткую вижимку новости и регион и ссылку. по http также будет отдавать метрики по регионам и список новостей
mysql - в качестве хранилища (пока)
php - фоновый процесс будет доставать из хранилища необработанные статьи и слать аналайзеру чтобы тот отдал скор статьи
php - фоновый процесс будет постоянно пересчитывать коэффициенты для региона

парсер - 
php - фоновый процесс будет постоянно ходить по rss лентам новостных изданий и получать новости

аналайзер (пока будет встроен в первое приложение)
php - пхп процесс который получает текст и анализируе его и отдает насколько статья негативная
