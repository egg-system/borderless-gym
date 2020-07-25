<?php
declare(strict_types=1);

namespace App\Services\Search;

use Illuminate\Http\Request;

interface SearchInterface
{
    /**
     * 詳細検索
     * ジムオーナー利用時：トレーナー詳細検索
     * トレーナー利用時：ジム詳細検索
     */
    public function detailSearch(Request $request);

    /**
     * プロフィール検索
     * ジムオーナー利用時：ジムプロフィール検索
     * トレーナー利用時：トレーナープロフィール検索
     */
    public function profileSearch(Request $request);

    /**
     * メッセージ検索
     */
    public function messageSearch(Request $request);
}