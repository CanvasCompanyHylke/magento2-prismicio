<?php

namespace Elgentos\PrismicIO\Helper;

// This is a helper that you can use to get the UID of a document from a category ID.

class CategoryIdToDocumentUid extends \Magento\Framework\App\Helper\AbstractHelper {
    const PREFIX = 'category-';

    public function getUid(): string {
        return self::PREFIX . $this->layerResolver->get()->getCurrentCategory()->getId() ?? '';
    }

}
