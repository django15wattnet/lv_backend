<?php
declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Contracts\Pagination\LengthAwarePaginator as LengthAwarePaginatorContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

/**
 * API-Controller, Artikel.
 */
class ArticleController extends BaseController
{
    /**
     * Liste aller Artikel
     * @return Collection
     */
    public function indexAction(): Collection
    {
        return Article::all();
    }


    public function indexPaginatedAction(int $pageSize): LengthAwarePaginatorContract
    {
        return Article::paginate($pageSize);
    }


    /**
     * Liefert den Artikel mit der ID $id oder eine 404-Response.
     *
     * @param int $id
     * @return Article|JsonResponse
     */
    public function byIdAction(int $id): Article|JsonResponse
    {
        try {
            return Article::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return \response()->json(['message' => 'Article not found'], ResponseAlias::HTTP_NOT_FOUND);
        }
    }
}
/*
 echo "# lv_frontend" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:django15wattnet/lv_frontend.git
git push -u origin main
 */
